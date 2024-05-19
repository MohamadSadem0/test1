package com.example.Alert.Guard.dto;
import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.security.Timestamp;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class PhoneDataDTO {
    private Long phoneId;
    private Timestamp timestamp;
    private String location;
    private byte[] soundData;
}
