package com.example.Alert.Guard.dto;
import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.security.Timestamp;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class BalloonDetectionDTO {
    private Long detectionId;
    private UserDTO user;
    private Timestamp detectionTime;
    private boolean explosion;
}